


function concatnateToLine(oldContent,toBeAdded){
    var newContent = oldContent;
    if(!checkIfExists(oldContent,toBeAdded)){
        newContent = oldContent + " \n " + toBeAdded;
    }
    
    return newContent;
}

function checkIfExists(content,toBeChecked){
    if(content.includes(toBeChecked)){
        return true;
    }

    return false;
}



module.exports = {
   concatnateToLine:concatnateToLine 
}