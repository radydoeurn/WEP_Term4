const express = require('express');
const app = express();
const cors = require('cors');
// TODO: How to use cors modules here?
app.listen(process.env.PORT || 3000);
app.get('/', function(req, res) {
    res.json({
        status: 200,
        message: 'Welcome to the API',
        endpoint: '/api/v1/todos'
    })
});

const todoRoute = require('./routes/todoRoute');
app.use(express.static('public'));
app.use(cors({origin:'*'}));
app.use('/api/v1/todos', todoRoute);