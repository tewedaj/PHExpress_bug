
    const { DataTypes } = require('sequelize');
    const sequelizeCon = require('./connection');

    module.exports = (sequelizeCon, DataTypes) => {

        const Glucose = sequelizeCon.define("Glucose", {

     
 
    id : {
        type: DataTypes.NUMBER,
        allowNull: false
    },
     
 
    user_id : {
        type: DataTypes.USER,
        allowNull: false
    },
     
 
    mg_dl : {
        type: DataTypes.NUMBER,
        allowNull: false
    },
     
 
    carb : {
        type: DataTypes.NUMBER,
        allowNull: false
    },
     
 
    insuline : {
        type: DataTypes.NUMBER,
        allowNull: false
    },
     
  }); 
 
  return Glucose  
 
 };