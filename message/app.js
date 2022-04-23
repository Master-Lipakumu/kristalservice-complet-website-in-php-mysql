var express = require('express'),
swig = required('swig'),
mailer = require('express-mailer'),
path = require('path'),
app = express();


app.use(express.logger());
app.use(express.bodyParser());
app.use(express.static(path.join(__dirname, 'public')));
app.engine('html', swig.renderFile);

app.set('views', __dirname+'/views');
app.set('view engine', 'html');

app.get('/', function(req, res){
    res.render('index');
});


app.post('/contact', function(req, res, next){
    mailer.extend(app, {
        form: req.body.email,
        host: 'ftpupload.net',
        secureConnection: true,
        port: 21,
        transportMethod: 'ftp',
        auth:{
            user: 'epiz_22726529',
            pass: 'et7nEi2Kz'
        }
    });
    app.mailer.send('email', {
        to: 'kristalservice2018@gmail.com',
        subject: req.body.subject,
        message: req.body.massage
    }, function(err){
        if(err){
            console.log('on a une erreur!');return;
        }
        res.send('Email envoyé');
    });
});

app.listen(3000);
console.log('App is running');
