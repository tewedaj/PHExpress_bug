
    const { DataTypes } = require('sequelize');
    const sequelizeCon = require('./connection');

    module.exports = (sequelizeCon, DataTypes) => {

        const Tracker = sequelizeCon.define("Tracker", {

     
 
    id : {
        type: DataTypes.NUMBER,
        allowNull: false
    },
     
 
    command : {
        type: DataTypes.STRING,
        allowNull: false
    },
     
 
    timeStamp : {
        type: DataTypes.DATETIME,
        allowNull: false
    },
     
  }); 
 
  return Tracker  
 
 };