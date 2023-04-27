
    const {configFile} = require('../util/configFile');
    const { Sequelize } = require('sequelize');

    const sequelizeCon = new Sequelize(configFile.DB, configFile.USER, configFile.PASSWORD, {
      host: configFile.HOST,
      dialect: 'postgres',
      port: 5432,
      logging: false
    });
    
    module.exports = sequelizeCon;
    