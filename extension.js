const vscode = require('vscode');
const crudController = require("./src/controllers/crud");

/**
 * @param {vscode.ExtensionContext} context
 */
function activate(context) {
		
	let CRUD = vscode.commands.registerCommand('phexpress.crud', async function () {
		//todo:  get the model name
		//todo: create api for -> CREATING , UPDATING USING EACH KEY , DELETING USING EACH KEY , READ
		var dataList =  await crudController.createCrud(vscode);
		
		vscode.window.showInformationMessage(dataList);
	});

	context.subscriptions.push(CRUD);
}


function deactivate() {}

module.exports = {
	activate,
	deactivate
}
