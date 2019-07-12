const express = require('express');
const app = express();
// const port = 3000;
const port = process.env.PORT || 3000;

app.get('/', (req, res) => {
  res.send('Deployed!');
});

app.listen(port, () => {
  console.log(`Server listening on port ${port}...`);
});