
    const { DataTypes } = require('sequelize');
    const sequelizeCon = require('./connection');

    module.exports = (sequelizeCon, DataTypes) => {

        const TestModel2 = sequelizeCon.define("TestModel2", {

     
 
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
     
 
    user_id : {
        type: DataTypes.USER,
        allowNull: false
    },
     
  }); 
 
  return TestModel2  
 
 };