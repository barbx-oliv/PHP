const express = require("express");

const app = express();
const PORT = 3001;

app.use(express.json());

app.get("/", (req, res) => {
    res.send("Servidor de produtos está em funcionamento");
});

app.listen(PORT, () => {
    console.log(" O servidor está rodando na porta " + PORT);
});