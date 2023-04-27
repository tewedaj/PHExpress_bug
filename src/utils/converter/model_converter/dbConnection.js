const {readContent} = require("../../IO/readFile");
const {writeFile} = require("../../IO/writeFile");



async function connectionFile(projectName,vscode){

    
    
    var connectionFileContaint = `
    const {configFile} = require('../util/configFile');
    const { Sequelize } = require('sequelize');

    const sequelizeCon = new Sequelize(configFile.DB, configFile.USER, configFile.PASSWORD, {
      host: configFile.HOST,
      dialect: 'postgres',
      port: 5432,
      logging: false
    });
    
    module.exports = sequelizeCon;
    `;

    await writeFile(`/${projectName}/models/`,'connection.js',vscode,connectionFileContaint);

}


async function configFileFile(projectName,setting,vscode){
    console.log("***********zxzx: ", setting);

    var configFile = `
    module.exports = {
        HOST: "${setting.server}",
        USER: "${setting.userName}",
        PASSWORD: "${setting.serverPassword}",
        DB: "${setting.databaseName}",
        dialect: "postgres",
        pool: {
            max: 5,
            min: 0,
            acquire: 30000,
            idle: 10000
        }
    };    
    `;
    await writeFile(`/${projectName}/utils/`,'configFile.js',vscode,configFile);
    
}


async function getSetting(vscode){
    var setting = await readContent("/util/","setting.php",vscode);
    var chagned = changeSettingsToJson(setting);
    return JSON.parse(chagned);
}


function changeSettingsToJson(setting){
    return setting.split("=>").join(":").split("[").join("{").split("];").join("}").split("=")[1];
}


module.exports = {
    changeSettingsToJson: changeSettingsToJson,
    connectionFile: connectionFile,
    configFileFile: configFileFile,
    getSetting: getSetting
}