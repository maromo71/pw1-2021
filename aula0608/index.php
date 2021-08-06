<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinião Sobre Streaming</title>
</head>
<body>
    <h2>Opinião Sincera</h2>
    <form action="recebe.php" method="post">
        <label for="optionOpiniao">
            <strong>Qual sua opinião sobre o Streaming Selecionado ?</strong>
        </label>
        <p>
            <input type="radio" name="optionOpiniao" id="optionOpiniao" value="Muito Bom">Muito Bom
            <input type="radio" name="optionOpiniao" id="optionOpiniao" value="Bom">Bom
            <input type="radio" name="optionOpiniao" id="optionOpiniao" value="Regular">Regular
            <input type="radio" name="optionOpiniao" id="optionOpiniao" value="Ruim">Ruim
        </p>
        <p>
            <label for="comboProduto">
                <strong>Selecione o Streaming preferido</strong>
            </label>
        </p>
        <p>
            <select name="comboProduto" id="comboProduto">
                <option value="Netflix">Netflix</option>
                <option value="Prime">Prime Vídeo</option>
                <option value="Globoplay">Globoplay</option>
                <option value="Disney">Disney Plus</option>
            </select>
        </p>
        <p>
            <strong>Digite seu comentário sobre o streaming selecionado:</strong>
        </p>
        <p>
            <textarea name="inputComentario" id="inputComentario" 
            cols="60" rows="7"></textarea>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
        
    </form>
</body>
</html>