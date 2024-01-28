'use client'
import React from 'react';
import { useState } from 'react';

export default function page() {

    const [formData, setFormData] = useState(
        {
            email: "",
            password: "",
            confirmPassword : "",
            firstname: "",
            lastname: ""
        }
    )    

    const handleChange = (event) => {   
        
        //console.log(event.target.value)
        const { name, value } = event.target;
        setFormData({ ...formData, [name]: value });
    
    }

    const handleSubmit = async (e) =>{
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
            }
            console.log(response.body);
            // Gérer la réponse - par exemple, rediriger l'utilisateur ou afficher un message de succès
        } catch (error) {
            console.error('Erreur d\'inscription:', error);
        }
    }

  return (
    <>
        <div className="card">
                <h4 className="card-header">Register</h4>
                <div className="card-body">
                    <form onSubmit={ handleSubmit }>
                        <div className="form-group">
                            <label>Firstname : </label>
                            <input name="firstname" type="text" onChange={handleChange} placeholder='Enter your firstname'/>
                            
                        </div>
                        <div className="form-group">
                            <label>Lastname</label>
                            <input name="lastname" type="text"  onChange={handleChange} placeholder='Enter your lastname'/>
                            
                        </div>
                        <div className="form-group">
                            <label>Email</label>
                            <input name="email" type="text" onChange={handleChange} placeholder='Enter your email adress' />
                            
                        </div>
                        <div className="form-group">
                            <label>Password</label>
                            <input name="password" type="password" onChange={handleChange} placeholder='Enter your password' />
                        </div>

                        <div className="form-group">
                            <label>Confirm password</label>
                            <input name="confirmPassword" type="password" onChange={handleChange} placeholder='Confirm your password' />
                        </div>

                        <button className="btn btn-primary">
                            Register
                        </button>
                        {/* <Link href="/account/login" className="btn btn-link">Cancel</Link> */}
                    </form>
                </div>
            </div>
    </>
  )
}


