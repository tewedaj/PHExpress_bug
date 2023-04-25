const vscode = require('vscode');
const crudController = require("./src/controllers/crud");
const { postManGenerator } = require('./src/controllers/postMan');

/**
 * @param {vscode.ExtensionContext} context
 */
function activate(context) {

	let CRUD = vscode.commands.registerCommand('phexpress.crud', async function () {
		var dataList = await crudController.createCrud(vscode);

		vscode.window.showInformationMessage(dataList);
	});

	let postMan = vscode.commands.registerCommand('phexpress.PostManGenerator', async function () {

		postManGenerator(vscode);
	})

	context.subscriptions.push(CRUD);
	context.subscriptions.push(postMan);
}


function deactivate() { }

module.exports = {
	activate,
	deactivate
}
