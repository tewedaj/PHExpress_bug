const { posix } = require('path');



//fileUrl is from the consecpt of the root folder of the project
 async function readContent(fileUrl, fileName,vscode) {
    var pathVar = vscode.workspace.workspaceFolders[0].uri;
    const folderPath = vscode.workspace.workspaceFolders[0].uri.path;
    var fileLocations = pathVar.with({ path: posix.join(folderPath.split("%20").join(" ").split("c%3a").join("C://") + fileUrl, fileName) });
    var content = await vscode.workspace.fs.readFile(fileLocations);
    content = Buffer.from(content).toString('utf8');

    return content;
}



module.exports = {
    readContent: readContent
}