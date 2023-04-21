

//'/private\s+(\w+)\s+\$(\w+)\s*;\s*\/\/size:\s*(\d+)?/'


function getTextModelDetail(modelBody) {
    var regex = /private\s+(\w+)\s+\$(\w+)\s*;\s*\/\/size:\s*(\d+)?/g;
    // var modelDetail = regex.exec(modelBody);
    const matches = [];
    let match;

    while ((match = regex.exec(modelBody)) !== null) {
        matches.push({
            type: match[1],
            name: match[2],
            size: match[3]

        });
    }
    return matches;
}

module.exports = {
    getTextModelDetail: getTextModelDetail
}