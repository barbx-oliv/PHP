const express = require("express");

const app = express();
const PORT = 3002;

app.use(express.json());

app.get("/", (req, res) => {
    res.send("Servidor de usuários está em funcionamento");
});

app.listen(PORT, () => {
    console.log(" O servidor está rodando na porta " + PORT);
});