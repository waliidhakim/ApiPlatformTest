'use client'
import React from 'react';
import Link from 'next/link';
import styles from './Navbar.module.css';
import { useAuth } from '../context/authContext';
// import { useContext } from 'react';




export default function Navbar() {
  const { user, token, login, logout } = useAuth();

  // const {data} = useContext(DataContext);
  
  console.log("token : ", token );
  console.log("user : ", user );
  return (
    <nav className={styles.navbar}>
        <Link href="/"> Accueil</Link>
        <Link href="/admin"> Admin Section </Link>
        <Link href="/prestataire/my_section"> Espace Prestataire </Link>
        <Link href="/prestataire/become_prestataire"> Devenir Prestataire </Link>
        <Link href="/profile"> Profile </Link>
        {token ? <Link href="/logout"> Logout </Link> : "" }
        {!token ? <Link href="/login"> Login </Link> : "" }
    </nav>
  )
}
