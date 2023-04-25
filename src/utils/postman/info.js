//Generate the info data of the postman file
function generateInfo(modelName) {


    return {
        "info": {
            "_postman_id": "",
            "name": modelName,
            "schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
            "_exporter_id": ""
        }
    }
}



module.exports = {
    generateInfo: generateInfo
}