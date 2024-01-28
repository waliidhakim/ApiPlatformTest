"use client"
import React, { useState } from 'react';
import styles from './page.module.css';
import Navbar from '../../components/NavBar/Navbar';
// import  AuthProvider  from '../../components/context/authContext';
import SearchBar from '../../components/SearchBar/SearchBar';
import Carousel from '../../components/Carousel/Carousel';
// import ContextProvider from '../../components/contextTest/contextTest';
// import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import { AuthProvider } from '../../components/context/authContext';


export default function Home({children}) {

  const handleSearch = (searchValue, category) => {
    console.log('Recherche:', searchValue, 'Catégorie:', category);
  };
  // const { user, token, login, logout } = useAuth();
  // console.log("user auth : ", user );
  
  return (
    
      <AuthProvider>
          
          <main className={styles.main}>
            <Navbar></Navbar>
            <h1>Home page</h1>
            <SearchBar onSearch={handleSearch} />
            
            <Carousel/>
            {children}
          
          </main>
      </AuthProvider>
   
    
  )
}
