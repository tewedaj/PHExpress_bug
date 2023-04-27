const vscode = require('vscode');
const crudController = require("./src/controllers/crud");
const { postManGenerator } = require('./src/controllers/postMan');
const {upScale} = require('./src/controllers/upScale');

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
	});

	let upScaleCommand = vscode.commands.registerCommand('phexpress.UpScale', async function(){
		await upScale(vscode);
	});

	context.subscriptions.push(CRUD);
	context.subscriptions.push(postMan);
	context.subscriptions.push(upScaleCommand);
}


function deactivate() { }

module.exports = {
	activate,
	deactivate
}
