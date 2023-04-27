
//get 
function get(modelName){
    var response = `
async function get${modelName}(){
        return new Promise((resolve,reject) =>{
            ${modelName}.findAll().then((res)=>{
               resolve(res);
            }).catch((err)=>{
                reject(err);
            })
        })
       
      
    }
    `
    return response;
}

//get by all data points
function getBy(modelName,model){
    var response = "";
   model.forEach(variable => {
    var paramName = variable.name.split("_").join("");
   

     response = response + `
     
     async function getBy${paramName}(${paramName}_value){
      ${modelName}.findAll({
            where: {
              ${paramName}: ${paramName}_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
    `;

   });

   return response;
}



module.exports = {
    get: get,
    getBy: getBy,
}