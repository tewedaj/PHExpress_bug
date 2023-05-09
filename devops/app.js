var express = require('express'); 

                var app = express();
              var GlucoseRoute =  require("./routes/Glucose.js");
            
              var TrackerRoute =  require("./routes/Tracker.js");
            
              var TestModel3Route =  require("./routes/TestModel3.js");
            
              var TestModel2Route =  require("./routes/TestModel2.js");
            
              var TeacherRoute =  require("./routes/Teacher.js");
            
              var StudentRoute =  require("./routes/Student.js");
            
              var UserRoute =  require("./routes/User.js");
            undefined
            
            app.use('/User',UserRoute);
            
            
            
            app.use('/Student',StudentRoute);
            
            
            
            app.use('/Teacher',TeacherRoute);
            
            
            
            app.use('/TestModel2',TestModel2Route);
            
            
            
            app.use('/TestModel3',TestModel3Route);
            
            
            
            app.use('/Tracker',TrackerRoute);
            
            
            
            app.use('/Glucose',GlucoseRoute);
            
            app.listen(3000, () => {
               
            })
            module.exports = app;
            
  