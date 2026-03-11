<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Perfil</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <h1>Parrcela</h1>
            <label for="nombreTecnico">Tecnico: </label>
            <span id="nombreTecnico">Mario Perez Bautista</span>
        </header>
        <main>
            <section>
                <h2>Datos generales</h2>
                <div >
                    <div >
                        <button id="buscarParcela">Buscar parcela</button>
                    </div>
                    <div >
                        <label for="latitud">Latitud:</label>
                        <input type="number" id="latitud" name="latitud" required>
                    </div>
                    <div >
                        <label for="longitud">Longitud:</label>
                        <input type="text" id="longitud" name="longitud" required>
                    </div>
                    <div >
                        <label for="nombreParcela">Nombre de la parcela:</label>
                        <input type="text" id="nombreParcela" name="nombreParcela" required>
                    </div>
                    <div >
                        <label for="municipio">Municipio:</label>
                        <select id="municipio" name="municipio" required>
                            <option> Seleccionar </option>
                            <option>Apizaco</option>
                            <option>Espanita</option>
                            <option>Huemantla</option>
                        </select>
                    </div>
                    <div >
                        <label for="localidad">Localidad:</label>
                        <input type="text" id="localidad" name="localidad" required>
                    </div>
                    <div >
                        <label for="superficie">Superficie (Ha):</label>
                        <input type="text" id="superficie" name="superficie" required>
                    </div>
                    <div >
                        <label for="tipoManejo">Tipo de manejo:</label>
                        <select id="tipoManejo" name="tipoManejo" required>
                            <option> Seleccionar </option>
                            <option value="convencional">Convencional</option>
                            <option value="organico">Organico</option>
                            <option value="sustentable">Sustentable</option>
                        </select>
                    </div>
                    <div >
                        <label for="regimenHidrico">Regimen hidrico:</label>
                        <select id="regimenHidrico" name="regimenHidrico" required>
                            <option> Seleccionar </option>
                            <option value="riego">Riego</option>
                            <option value="temporal">Temporal</option>
                        </select>
                    </div>
                    <div >
                        <label for="derechoPropiedad">Derecho de propiedad:</label>
                        <select id="derechoPropiedad" name="derechoPropiedad" required>
                            <option> Seleccionar </option>
                            <option value="propia">Propia</option>
                            <option value="rentada">Rentada</option>
                            <option value="comodatada">Comodatada</option>
                        </select>
                    </div>
                    <div >
                        <label for="estatus">Estatus:</label>
                        <select id="estatus" name="estatus" required>
                            <option> Seleccionar </option>
                            <option value="activa">Activa</option>
                            <option value="inactiva">Inactiva</option>
                        </select>
                    </div>
                </div>
                <br>
                <div >
                    <button type="submit">Guardar Cambios</button>
                </div>
            </section>
        </main>
    </body>
</html>