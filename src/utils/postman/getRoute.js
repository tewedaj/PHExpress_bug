const { readContent } = require("../IO/readFile");
const { getTextModelDetail } = require("../regex/modelRegex");
const { postManBody } = require("./body");
const { generateItemGet, generateItemPost, generateItemPatch, generateItemDelete } = require("./item");

//Get Route list from the file
async function getRoutes(fileContent, vscode) {


    // regex list used
    const getRequestRouteRegex = /(\$app->get\(")(.*?)(",)/g;
    const postRequestRouteRegex = /(\$app->post\(")(.*?)(",)/g;
    const patchRequestRouteRegex = /(\$app->patch\(")(.*?)(",)/g;
    const deleteRequestRouteRegex = /(\$app->delete\(")(.*?)(",)/g;
    const parentNameRegex = /(\$app->setParent\(")(.*?)("\))/g;

    var getRequestList;
    var postRequestList;
    var patchRequestList;
    var deleteRequestList;
    var parent = parentNameRegex.exec(fileContent);
    var routes = postManBody(parent[2]);

    var content = await readContent("/model/", parent[2] + ".php", vscode);
    console.log("File: ", content);
    var jsonContent = getTextModelDetail(content);

    var obj = {};

    jsonContent.forEach(element => {
        obj[element.name] = element.type == "int" ? 0 : element.type == "string" ? "" : element.type == "DateTime" ? "2023/12/03" : 0;
    });

    while (getRequestList = getRequestRouteRegex.exec(fileContent)) {

        routes.item[0].item.push(generateItemGet(parent[2] + getRequestList[2]));
    }
    while (postRequestList = postRequestRouteRegex.exec(fileContent)) {

        routes.item[1].item.push(generateItemPost(parent[2] + postRequestList[2], obj));
    }
    while (patchRequestList = patchRequestRouteRegex.exec(fileContent)) {
        routes.item[2].item.push(generateItemPatch(parent[2] + postRequestList[2], obj));
    }
    while (deleteRequestList = deleteRequestRouteRegex.exec(fileContent)) {
        routes.item[3].item.push(generateItemDelete(parent[2] + getRequestList[2]));
    }

    return routes;
}

module.exports = {
    getRoutes: getRoutes
}