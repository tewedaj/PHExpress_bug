
    const { DataTypes } = require('sequelize');
    const sequelizeCon = require('./connection');

    module.exports = (sequelizeCon, DataTypes) => {

        const Teacher = sequelizeCon.define("Teacher", {

     
 
    id : {
        type: DataTypes.NUMBER,
        allowNull: false
    },
     
 
    name : {
        type: DataTypes.STRING,
        allowNull: false
    },
     
 
    age : {
        type: DataTypes.NUMBER,
        allowNull: false
    },
     
 
    sex : {
        type: DataTypes.STRING,
        allowNull: false
    },
     
  }); 
 
  return Teacher  
 
 };