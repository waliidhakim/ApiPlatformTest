'use client'
import React from 'react';
import { useState , useContext } from 'react';
import { useRouter } from 'next/navigation';
import { useAppContext } from '../../../components/contextTest2/context';



export default function page({children}) {

    const {user, setUser} = useAppContext();
    console.log("current context in login:", user);
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
        //console.log(JSON.stringify(formData));

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
            //console.log("responseData :", )
            const token = responseData.token;
            // context.setUser(re)
            //console.log('Token:', token);
            localStorage.setItem('jwtToken', token);

            const base64Url = token.split('.')[1];
            const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
            const decodedPayload = JSON.parse(window.atob(base64));

            console.log("payload : ", decodedPayload)

            setUser({ id : decodedPayload.user_id , token : token, role : decodedPayload.roles[0]});

            
            localStorage.setItem('userId', decodedPayload.user_id);

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


