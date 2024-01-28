'use client'
import React from 'react';
import { useState , useContext } from 'react';
import { useRouter } from 'next/navigation';



export default function page({children}) {

    
    const [formData, setFormData] = useState(
        {
            email: "",
            password: ""
        }
    );

    const router = useRouter();   


    const handleChange = (event) => {   
        
        //console.log(event.target.value)
        const { name, value } = event.target;
        setFormData({ ...formData, [name]: value });
    
    }
   
    const handleSubmit = async (e) =>{
        e.preventDefault();
        console.log(JSON.stringify(formData));

        try {
            const response = await fetch(`${process.env.NEXT_PUBLIC_API_URL_SHORT}/login`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(formData)
            });
    
            if (!response.ok) {
                console.log('Error while loging in', response);
            }

            const responseData = await response.json();
            const token = responseData.token;
            
            console.log('Token:', token);
            localStorage.setItem('jwtToken', token);
            router.push('/');
            
        } catch (error) {
            console.error('Error while loging in. please retry', error);
        }
    }

  return (
    <>
        <div className="card">
                <h4 className="card-header">Login</h4>
                <div className="card-body">
                    <form onSubmit={ handleSubmit }>
                    
                        <div className="form-group">
                            <label>Email : </label>
                            <input name="email" type="text" onChange={handleChange} placeholder='Enter your email adress' />
                            
                        </div>
                        <div className="form-group">
                            <label>Password : </label>
                            <input name="password" type="password" onChange={handleChange} placeholder='Enter your password' />
                        </div>

                        <button className="btn btn-primary">
                            Login
                        </button>
                    </form>
                </div>
        </div>
    </>
  )
}


