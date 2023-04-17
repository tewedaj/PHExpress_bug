
const { posix } = require('path');

//todo: Take the model the command is run on
//todo: Creacte a route file with the model name
//todo: Create endpoint for each target in the route file
//todo: import the route file to index.php file
 async function createCrud(vscode){
	    var pageContent = vscode.window.activeTextEditor.document.getText();
		var path = vscode.window.activeTextEditor.document.uri._fsPath.toString();
		var folderUri = vscode.workspace.workspaceFolders[0].uri;
		var modelName = vscode.window.activeTextEditor.document.uri.toString().split("/")[vscode.window.activeTextEditor.document.uri.toString().split("/").length - 1].split(".php")[0];

         
        var writeWord = Buffer.from(pageContent,'utf8');
		// var folderUri = vscode.workspace.workspaceFolders[0].uri;
		// var fileLocation = folderUri.with({path: posix.join(folderUri.split("%20").join(" ").split("c%3a").join("C://")+"/routes/", modelName+".php") });
        // console.log("uuuuuuuuuuu: ", folderUri.split("%20").join(" ").split("c%3a").join("C://")+"../routes/");
		await vscode.workspace.fs.writeFile( vscode.window.activeTextEditor.document.uri,writeWord);

        return JSON.stringify("{}");
        console.log("Title: ", pageContent);
        console.log("Path: ", path);
        console.log("folderUri: ", folderUri);

    

}





module.exports = {
    createCrud: createCrud
}