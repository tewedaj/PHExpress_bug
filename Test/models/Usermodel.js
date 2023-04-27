
    const { DataTypes } = require('sequelize');
    const sequelizeCon = require('./connection');

    module.exports = (sequelizeCon, DataTypes) => {

        const User = sequelizeCon.define("User", {

     
 
    id : {
        type: DataTypes.NUMBER,
        allowNull: false
    },
     
 
    user_name : {
        type: DataTypes.STRING,
        allowNull: false
    },
     
 
    pass_word : {
        type: DataTypes.STRING,
        allowNull: false
    },
     
  }); 
 
  return User  
 
 };