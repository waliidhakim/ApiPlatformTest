// src/app/components/PrestataireForm/index.js
"use client"
import React, { useState } from 'react';
import styles from './prestataireRegister.module.css';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
// import { useRouter } from 'next/navigation';

const PrestataireRegister = () => {
    const initialFormData = {
        name: '',
        address: '',
        description: '',
        contactInfos: '',
        sector: '',
        kbis: '',
        image: ''
    }
    const [formData, setFormData] = useState(initialFormData);
    const [isLoading, setIsLoading] = useState(false);
    // const router = useRouter();  

    // const notify = () => toast("Hello coders it was easy!");
    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData({
            ...formData,
            [name]: value
        });
    };

    const handleSubmit = async () => {
        setIsLoading(true);
        try {
            const token = localStorage.getItem('jwtToken');
            const response = await fetch(`${process.env.NEXT_PUBLIC_API_URL}/prestataire/register`, {
                method: 'POST',
                headers: {
                    'Accept': 'application/ld+json',
                    Authorization: token ? `Bearer ${token}` : '',
                    'Content-Type': 'application/ld+json',
                },
                body: JSON.stringify(formData)
            });

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const data = await response.json();
            console.log(data);
            toast.success("Opération réussie. Veuillez attendre l'approbation de l'admin");
            setIsLoading(false); 
            setFormData(initialFormData);
            // router.push('/');
            
            
        } catch (error) {
            console.error("Erreur lors de l'envoi des données:", error);
            setIsLoading(false); 
            toast.error("Une erreur est survenue. Veuillez réessayer.");
        }
       
    };

    return (
        <>  
            <ToastContainer />
            <div className={styles.form}>
                {/* <button onClick={notify}>Click me!</button> */}
                {isLoading && <div>Chargement...</div> }
                
                <label htmlFor="name">Nom:</label>
                <input type="text" id="name" name="name" value={formData.name} onChange={handleChange} placeholder="Nom" required />
                
                <label htmlFor="address">Adresse:</label>
                <input type="text" id="address" name="address" value={formData.address} onChange={handleChange} placeholder="Adresse" required />
                
                <label htmlFor="description">Description:</label>
                <textarea id="description" name="description" value={formData.description} onChange={handleChange} placeholder="Description" required />
                
                <label htmlFor="contactInfos">Informations de contact:</label>
                <input type="text" id="contactInfos" name="contactInfos" value={formData.contactInfos} onChange={handleChange} placeholder="Informations de contact" required />
                
                <label htmlFor="sector">Secteur:</label>
                <input type="text" id="sector" name="sector" value={formData.sector} onChange={handleChange} placeholder="Secteur" required />
                
                <label htmlFor="kbis">Kbis:</label>
                <input type="text" id="kbis" name="kbis" value={formData.kbis} onChange={handleChange} placeholder="Kbis" required />
                
                <label htmlFor="image">Image URL:</label>
                <input type="text" id="image" name="image" value={formData.image} onChange={handleChange} placeholder="Image URL" required />
                
                <button type="button" onClick={handleSubmit}>Envoyer</button>
            </div>
            
        </>
    );
};

export default PrestataireRegister;
