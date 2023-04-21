const { posix } = require('path');



async function writeFile(fileUrl,fileName, vscode, content) {
    var buffredContent = Buffer.from(content,'utf8');

    var pathVar = vscode.workspace.workspaceFolders[0].uri;
    const folderPath = vscode.workspace.workspaceFolders[0].uri.path;
    var fileLocations = pathVar.with({ path: posix.join(folderPath.split("%20").join(" ").split("c%3a").join("C://") + fileUrl, fileName) });
   var res = await vscode.workspace.fs.writeFile(fileLocations, buffredContent);
   console.log("MESSAGE: ", res);
}




module.exports = {
    writeFile: writeFile
}