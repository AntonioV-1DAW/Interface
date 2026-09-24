<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Antonio">
		<meta name="copyright" content="AVM">
        <link rel="stylesheet" href="asignaturas.css">
    </head>
    <body>
        <h2>Formulario de Asignaturas</h2>
        <form action="resultado.php" method="get">
            <section>
                <!--Asignatura-->
                <input type="checkbox" id="BBDD" name="asignatura" value="BBDD">
			    <label for="BBDD">BBDD</label><br>

                <input type="checkbox" id="PRO" name="asignatura" value="PRO">
			    <label for="PRO">PRO</label><br>

                <input type="checkbox" id="INT" name="asignatura" value="INT">
			    <label for="INT">INT</label><br>

                <input type="checkbox" id="SSII" name="asignatura" value="SSII">
			    <label for="SSII">SSII</label><br>

                <input type="checkbox" id="LMSG" name="asignatura" value="LMSG">
			    <label for="LMSG">LMSG</label><br>

                <input type="checkbox" id="EEDD" name="asignatura" value="EEDD">
			    <label for="EEDD">EEDD</label><br><br>
            </section>
            <section>
                <!--Profesor-->
                <label for="profesor">Profesor</label><br>
                <select id="profesor" name="profesor" required>
                    <option value="">Selecciona un profesor</option>
                    <option value="Isabel Munoz">Isabel Munoz</option>
                    <option value="Alberto Dominguez">Alberto Dominguez</option>
                    <option value="Francisco Jose Garcia">Francisco Jose Garcia</option>
                </select>
            </section>
            <section>
                <!--Horas-->
                <label for="horas" class="texto">Horas</label><br>
                <input type="number" id="horas" name="horas" min="1" required>
            </section>
            <section>
                <!--Informacion-->
                <label for="informacion">Informacion</label><br>
                <textarea id="informacion" name="informacion" rows="10" cols="50" required></textarea>
            </section>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>