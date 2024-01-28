// SearchBar.js
import React, { useState } from 'react';
import UserLocationMap from '../../components/UserLocationMap/UserLocationMap';

const SearchBar = ({ onSearch }) => {
  const [searchValue, setSearchValue] = useState('');
  const [selectedCategory, setSelectedCategory] = useState('');

  const handleSearchChange = (e) => {
    setSearchValue(e.target.value);
  };

  const handleCategoryChange = (e) => {
    setSelectedCategory(e.target.value);
  };

  const handleSearchSubmit = (e) => {
    e.preventDefault();
    onSearch(searchValue, selectedCategory); 
  };

  return (
    <div>
      <form onSubmit={handleSearchSubmit}>
        <input
          type="text"
          value={searchValue}
          onChange={handleSearchChange}
          placeholder="Rechercher..."
        />
        

        <select value={selectedCategory} onChange={handleCategoryChange}>
          <option value="">Choisir une catégorie</option>
          <option value="categorie1">Catégorie 1</option>
          <option value="categorie2">Catégorie 2</option>
        </select>

        <button type="submit">Rechercher</button>
      </form>
      <UserLocationMap />
    </div>
  );
};

export default SearchBar;
