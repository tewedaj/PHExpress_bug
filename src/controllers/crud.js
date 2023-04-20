
const { posix } = require('path');
const { select, selectBy, selectById } = require('../utils/endpoints/selectEndpoint');

//todo: Take the model the command is run on
//todo: Creacte a route file with the model name
//todo: Create endpoint for each target in the route file
//todo: import the route file to index.php file
 async function createCrud(vscode){
	    var pageContent = vscode.window.activeTextEditor.document.getText();
		var path = vscode.window.activeTextEditor.document.uri._fsPath.toString();
		var folderUri = vscode.workspace.workspaceFolders[0].uri;
		var modelName = vscode.window.activeTextEditor.document.uri.toString().split("/")[vscode.window.activeTextEditor.document.uri.toString().split("/").length - 1].split(".php")[0];
        var indexContent = vscode.workspaceFolders;
        console.log("AAA: " + indexContent);
        var codeBlock = `<?php
        
        //auto generated file \n 
        
        $app = new phexpress();
        $app->setParent("${modelName}");

        ${select(modelName)} \n \n 
        ${selectById(modelName)} \n \n
        
        `;

        //'/private\s+(\w+)\s+\$(\w+)\s*;\s*\/\/size:\s*(\d+)?/'

        var buffredCodeBlock = Buffer.from(codeBlock,'utf8');

        
        var folderUri = vscode.workspace.workspaceFolders[0].uri;
        var activeEditorUri = vscode.window.activeTextEditor.document.uri.toString();
			activeEditorUri = activeEditorUri.replace(activeEditorUri.split("/")[activeEditorUri.split("/").length-1],"");
			activeEditorUri = activeEditorUri.replace(activeEditorUri.split("/")[0],"");
		var fileLocation = folderUri.with({path: posix.join(activeEditorUri.split("%20").join(" ").split("c%3A").join("C://")+"../routes/", modelName+'.php') });
		await vscode.workspace.fs.writeFile( fileLocation,buffredCodeBlock);

        return JSON.stringify(fileLocation);
        console.log("Title: ", pageContent);
        console.log("Path: ", path);
        console.log("folderUri: ", folderUri);

    

}





module.exports = {
    createCrud: createCrud
}