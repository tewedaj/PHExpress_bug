//Generate the info data of the postman file
function generateInfo(projectName) {


    return {
        "info": {
            "_postman_id": "",
            "name": projectName,
            "schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
            "_exporter_id": ""
        },
        "item":[]
    }
}



module.exports = {
    generateInfo: generateInfo
}