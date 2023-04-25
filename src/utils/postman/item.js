
//Generate a single Post man request
function generateItem(route, requestName, jsonBody) {


    return {
        "name": requestName,
        "item": [
            {
                "name": "addUser",
                "request": {
                    "method": "POST",
                    "header": [],
                    "body": {
                        "mode": "raw",
                        "raw": jsonBody,
                        "options": {
                            "raw": {
                                "language": "json"
                            }
                        }
                    },
                    "url": {
                        "raw": "http://localhost/" + route,
                        "protocol": "http",
                        "host": [
                            "localhost"
                        ],
                        "path": [
                            route.split("/").map((res) => {
                                return res + ",";
                            })
                        ]
                    }
                },
                "response": []
            }
        ]
    };
}



module.exports = {
    generateItem: generateItem
}