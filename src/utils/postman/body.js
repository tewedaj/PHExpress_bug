//Function to create the layout for the postman file
//creates folder for each type of request
function postManBody(mainTitle) {
    return {
        "name": mainTitle,
        "item": [
            {
                "name": "GET",
                "item": []
            },
            {
                "name": "POST",
                "item": []
            },
            {
                "name": "PATCH",
                "item": []
            },
            {
                "name": "DELETE",
                "item": []
            }
        ]
    }
}

module.exports = {
    postManBody: postManBody
}