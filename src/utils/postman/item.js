
//Generate a single Post man request
function generateItemGet(route){


    return {
        "name": route.split("/").join(" ").split(":").join("By "),
        "request": {
            "method": "GET",
            "header": [],
            "url": {
                "raw": "${{url}}" + route,
                "host": [
                    "${{url}}"
                ],
                "path": route.split("/")
                    
            }
        },
        "response": []
    };

}



function generateItemPost(route,body){
    return {
        "name": route.split("/").join(" ").split(":").join("By "),
        "request": {
            "method": "POST",
            "header": [],
            "body": {
                "mode": "raw",
                "raw": JSON.stringify(body),
                "options": {
                    "raw": {
                        "language": "json"
                    }
                }
            },
            "url": {
                "raw": "${{url}}" + route,
                "host": [
                    "${{url}}"
                ],
                "path": route.split("/")
                    
            }
        },
        "response": []
    };
}


function generateItemPatch(route,body){
    return {
        "name": route.split("/").join(" ").split(":").join("By "),
        "request": {
            "method": "PATCH",
            "header": [],
            "body": {
                "mode": "raw",
                "raw": JSON.stringify(body),
                "options": {
                    "raw": {
                        "language": "json"
                    }
                }
            },
            "url": {
                "raw": "${{url}}" + route,
                "host": [
                    "${{url}}"
                ],
                "path": route.split("/")
                    
            }
        },
        "response": []
    };
}


function generateItemDelete(route){


    return {
        "name": route.split("/").join(" ").split(":").join("By "),
        "request": {
            "method": "DELETE",
            "header": [],
            "url": {
                "raw": "${{url}}" + route,
                "host": [
                    "${{url}}"
                ],
                "path": route.split("/")
                    
            }
        },
        "response": []
    };

}



module.exports = {
    generateItemGet: generateItemGet,
    generateItemPost: generateItemPost,
    generateItemPatch: generateItemPatch,
    generateItemDelete: generateItemDelete
}