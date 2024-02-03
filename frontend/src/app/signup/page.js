'use client'
import React from 'react';
import { useState } from 'react';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';

export default function page() {
    const [isLoading, setIsLoading] = useState(false);

    const initalFormData =  {
        email: "",
        password: "",
        confirmPassword : "",
        firstname: "",
        lastname: ""
    }

    const [formData, setFormData] = useState(initalFormData)    

    const handleChange = (event) => {   
        
        //console.log(event.target.value)
        const { name, value } = event.target;
        setFormData({ ...formData, [name]: value });
    
    }

    const handleSubmit = async (e) =>{
        setIsLoading(true);
        e.preventDefault();
        console.log(JSON.stringify(formData));

        try {
            const response = await fetch(`${process.env.NEXT_PUBLIC_API_URL}/register`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(formData)
            });
    
            if (!response.ok) {
                console.log('Erreur lors de l\'inscription', response.body);
                throw new Error("Erreur lors de l'inscription");
            }
            //console.log(response.body);
            setIsLoading(false); 
            setFormData(initalFormData);
            toast.success("Opération réussie. Veuillez consulter votre boite mail",{autoClose: 1500});
            // Gérer la réponse - par exemple, rediriger l'utilisateur ou afficher un message de succès
        } catch (error) {
            setIsLoading(false); 
            toast.error("l'Opération a échoué. Veuillez réssayer",{autoClose: 1500});
            console.error('Erreur d\'inscription:', error);
        }
    }

  return (
    <>  
        <ToastContainer />
        <div className="card">
                <h4 className="card-header">Register</h4>
                <div className="card-body">
                    <form onSubmit={ handleSubmit }>
                        <div className="form-group">
                            <label>Nom : </label>
                            <input name="firstname" type="text" onChange={handleChange} placeholder='Enter your firstname'/>
                            
                        </div>
                        <div className="form-group">
                            <label>Prenom</label>
                            <input name="lastname" type="text"  onChange={handleChange} placeholder='Enter your lastname'/>
                            
                        </div>
                        <div className="form-group">
                            <label>Email</label>
                            <input name="email" type="text" onChange={handleChange} placeholder='Enter your email adress' />
                            
                        </div>
                        <div className="form-group">
                            <label>Mot de passe</label>
                            <input name="password" type="password" onChange={handleChange} placeholder='Enter your password' />
                        </div>

                        <div className="form-group">
                            <label>Confirmer le mot de passe</label>
                            <input name="confirmPassword" type="password" onChange={handleChange} placeholder='Confirm your password' />
                        </div>

                        <button className="btn btn-primary">
                            S'inscrire
                        </button>
                        {/* <Link href="/account/login" className="btn btn-link">Cancel</Link> */}
                    </form>
                    {isLoading && <div>Chargement...</div> }
                </div>
            </div>
    </>
  )
}


