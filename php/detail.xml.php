<?php
header("Content-type: text/xml");

  function isoDate ($days) {
    return date('Y-m-d', (time() + (86400 * $days)));
  }
?><?xml version="1.0" encoding="ISO-8859-15" ?>
<root id="28079" version="1.0" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.aemet.es/xsd/localidades.xsd">
	<origen>
		<productor>Agencia Estatal de Meteorología - AEMET. Gobierno de España</productor>
		<web>http://www.aemet.es</web>
		<enlace>http://www.aemet.es/es/eltiempo/prediccion/municipios/madrid-id28079</enlace>
		<language>es</language>
		<copyright>&#169; AEMET. Autorizado el uso de la información y su reproducción citando a AEMET como autora de la misma.</copyright>
		<nota_legal>http://www.aemet.es/es/nota_legal</nota_legal>
	</origen>
	<elaborado><?php echo isoDate(0); ?>T12:00:02</elaborado>
	<nombre>Madrid</nombre>
	<provincia>Madrid</provincia>
	<prediccion>
		<dia fecha="<?php echo isoDate(0); ?>">
			<prob_precipitacion periodo="00-24"></prob_precipitacion>
			<prob_precipitacion periodo="00-12"></prob_precipitacion>
			<prob_precipitacion periodo="12-24">100</prob_precipitacion>
			<prob_precipitacion periodo="00-06"></prob_precipitacion>
			<prob_precipitacion periodo="06-12">100</prob_precipitacion>
			<prob_precipitacion periodo="12-18">100</prob_precipitacion>
			<prob_precipitacion periodo="18-24">15</prob_precipitacion>
			<cota_nieve_prov periodo="00-24"></cota_nieve_prov>
			<cota_nieve_prov periodo="00-12"></cota_nieve_prov>
			<cota_nieve_prov periodo="12-24">1400</cota_nieve_prov>
			<cota_nieve_prov periodo="00-06"></cota_nieve_prov>
			<cota_nieve_prov periodo="06-12">1300</cota_nieve_prov>
			<cota_nieve_prov periodo="12-18">1300</cota_nieve_prov>
			<cota_nieve_prov periodo="18-24">1500</cota_nieve_prov>
			<estado_cielo periodo="00-24" descripcion=""></estado_cielo>
			<estado_cielo periodo="00-12" descripcion=""></estado_cielo>
			<estado_cielo periodo="12-24" descripcion="Nuboso con lluvia">24</estado_cielo>
			<estado_cielo periodo="00-06" descripcion=""></estado_cielo>
			<estado_cielo periodo="06-12" descripcion="Muy nuboso con lluvia">25</estado_cielo>
			<estado_cielo periodo="12-18" descripcion="Nuboso con lluvia escasa">44</estado_cielo>
			<estado_cielo periodo="18-24" descripcion="Intervalos nubosos">13n</estado_cielo>
			<viento periodo="00-24">
				<direccion></direccion>
				<velocidad></velocidad>
			</viento>
			<viento periodo="00-12">
				<direccion></direccion>
				<velocidad></velocidad>
			</viento>
			<viento periodo="12-24">
				<direccion>N</direccion>
				<velocidad>15</velocidad>
			</viento>
			<viento periodo="00-06">
				<direccion>O</direccion>
				<velocidad>10</velocidad>
			</viento>
			<viento periodo="06-12">
				<direccion>N</direccion>
				<velocidad>15</velocidad>
			</viento>
			<viento periodo="12-18">
				<direccion>NO</direccion>
				<velocidad>10</velocidad>
			</viento>
			<viento periodo="18-24">
				<direccion>C</direccion>
				<velocidad>0</velocidad>
			</viento>
			<racha_max periodo="00-24"></racha_max>
			<racha_max periodo="00-12"></racha_max>
			<racha_max periodo="12-24"></racha_max>
			<racha_max periodo="00-06"></racha_max>
			<racha_max periodo="06-12"></racha_max>
			<racha_max periodo="12-18"></racha_max>
			<racha_max periodo="18-24"></racha_max>
			<temperatura>
				<maxima>9</maxima>
				<minima>4</minima>
				<dato hora="06">4</dato>
				<dato hora="12">7</dato>
				<dato hora="18">7</dato>
				<dato hora="24">6</dato>
			</temperatura>
			<sens_termica>
				<maxima>6</maxima>
				<minima>1</minima>
				<dato hora="06">2</dato>
				<dato hora="12">4</dato>
				<dato hora="18">6</dato>
				<dato hora="24">6</dato>
			</sens_termica>
			<humedad_relativa>
				<maxima>85</maxima>
				<minima>50</minima>
				<dato hora="06">85</dato>
				<dato hora="12">65</dato>
				<dato hora="18">60</dato>
				<dato hora="24">70</dato>
			</humedad_relativa>
			<uv_max>2</uv_max>
		</dia>
		<dia fecha="<?php echo isoDate(1); ?>">
			<prob_precipitacion periodo="00-24">55</prob_precipitacion>
			<prob_precipitacion periodo="00-12">5</prob_precipitacion>
			<prob_precipitacion periodo="12-24">35</prob_precipitacion>
			<prob_precipitacion periodo="00-06">0</prob_precipitacion>
			<prob_precipitacion periodo="06-12">0</prob_precipitacion>
			<prob_precipitacion periodo="12-18">35</prob_precipitacion>
			<prob_precipitacion periodo="18-24">5</prob_precipitacion>
			<cota_nieve_prov periodo="00-24">1400</cota_nieve_prov>
			<cota_nieve_prov periodo="00-12"></cota_nieve_prov>
			<cota_nieve_prov periodo="12-24">1200</cota_nieve_prov>
			<cota_nieve_prov periodo="00-06"></cota_nieve_prov>
			<cota_nieve_prov periodo="06-12"></cota_nieve_prov>
			<cota_nieve_prov periodo="12-18">1400</cota_nieve_prov>
			<cota_nieve_prov periodo="18-24"></cota_nieve_prov>
			<estado_cielo periodo="00-24" descripcion="Intervalos nubosos con lluvia escasa">43</estado_cielo>
			<estado_cielo periodo="00-12" descripcion="Intervalos nubosos">13</estado_cielo>
			<estado_cielo periodo="12-24" descripcion="Intervalos nubosos con lluvia escasa">43</estado_cielo>
			<estado_cielo periodo="00-06" descripcion="Poco nuboso">12n</estado_cielo>
			<estado_cielo periodo="06-12" descripcion="Intervalos nubosos">13</estado_cielo>
			<estado_cielo periodo="12-18" descripcion="Intervalos nubosos con lluvia escasa">43</estado_cielo>
			<estado_cielo periodo="18-24" descripcion="Despejado">11n</estado_cielo>
			<viento periodo="00-24">
				<direccion>NO</direccion>
				<velocidad>10</velocidad>
			</viento>
			<viento periodo="00-12">
				<direccion>NO</direccion>
				<velocidad>10</velocidad>
			</viento>
			<viento periodo="12-24">
				<direccion>N</direccion>
				<velocidad>25</velocidad>
			</viento>
			<viento periodo="00-06">
				<direccion>S</direccion>
				<velocidad>5</velocidad>
			</viento>
			<viento periodo="06-12">
				<direccion>NO</direccion>
				<velocidad>10</velocidad>
			</viento>
			<viento periodo="12-18">
				<direccion>N</direccion>
				<velocidad>25</velocidad>
			</viento>
			<viento periodo="18-24">
				<direccion>N</direccion>
				<velocidad>10</velocidad>
			</viento>
			<racha_max periodo="00-24"></racha_max>
			<racha_max periodo="00-12"></racha_max>
			<racha_max periodo="12-24">40</racha_max>
			<racha_max periodo="00-06"></racha_max>
			<racha_max periodo="06-12"></racha_max>
			<racha_max periodo="12-18">40</racha_max>
			<racha_max periodo="18-24"></racha_max>
			<temperatura>
				<maxima>12</maxima>
				<minima>2</minima>
				<dato hora="06">4</dato>
				<dato hora="12">10</dato>
				<dato hora="18">7</dato>
				<dato hora="24">2</dato>
			</temperatura>
			<sens_termica>
				<maxima>12</maxima>
				<minima>-1</minima>
				<dato hora="06">4</dato>
				<dato hora="12">8</dato>
				<dato hora="18">3</dato>
				<dato hora="24">-1</dato>
			</sens_termica>
			<humedad_relativa>
				<maxima>85</maxima>
				<minima>45</minima>
				<dato hora="06">80</dato>
				<dato hora="12">55</dato>
				<dato hora="18">60</dato>
				<dato hora="24">70</dato>
			</humedad_relativa>
			<uv_max>2</uv_max>
		</dia>
		<dia fecha="<?php echo isoDate(2); ?>">
			<prob_precipitacion periodo="00-24">35</prob_precipitacion>
			<prob_precipitacion periodo="00-12">5</prob_precipitacion>
			<prob_precipitacion periodo="12-24">20</prob_precipitacion>
			<cota_nieve_prov periodo="00-24">700</cota_nieve_prov>
			<cota_nieve_prov periodo="00-12"></cota_nieve_prov>
			<cota_nieve_prov periodo="12-24">800</cota_nieve_prov>
			<estado_cielo periodo="00-24" descripcion="Intervalos nubosos">13</estado_cielo>
			<estado_cielo periodo="00-12" descripcion="Poco nuboso">12</estado_cielo>
			<estado_cielo periodo="12-24" descripcion="Intervalos nubosos">13</estado_cielo>
			<viento periodo="00-24">
				<direccion>NO</direccion>
				<velocidad>5</velocidad>
			</viento>
			<viento periodo="00-12">
				<direccion>N</direccion>
				<velocidad>10</velocidad>
			</viento>
			<viento periodo="12-24">
				<direccion>NO</direccion>
				<velocidad>5</velocidad>
			</viento>
			<racha_max periodo="00-24"></racha_max>
			<racha_max periodo="00-12"></racha_max>
			<racha_max periodo="12-24"></racha_max>
			<temperatura>
				<maxima>9</maxima>
				<minima>-1</minima>
			</temperatura>
			<sens_termica>
				<maxima>7</maxima>
				<minima>-3</minima>
			</sens_termica>
			<humedad_relativa>
				<maxima>85</maxima>
				<minima>45</minima>
			</humedad_relativa>
			<uv_max>2</uv_max>
		</dia>
		<dia fecha="<?php echo isoDate(3); ?>">
			<prob_precipitacion periodo="00-24">45</prob_precipitacion>
			<prob_precipitacion periodo="00-12">5</prob_precipitacion>
			<prob_precipitacion periodo="12-24">40</prob_precipitacion>
			<cota_nieve_prov periodo="00-24">1000</cota_nieve_prov>
			<cota_nieve_prov periodo="00-12"></cota_nieve_prov>
			<cota_nieve_prov periodo="12-24">1100</cota_nieve_prov>
			<estado_cielo periodo="00-24" descripcion="Intervalos nubosos">13</estado_cielo>
			<estado_cielo periodo="00-12" descripcion="Intervalos nubosos">13</estado_cielo>
			<estado_cielo periodo="12-24" descripcion="Intervalos nubosos">13</estado_cielo>
			<viento periodo="00-24">
				<direccion>O</direccion>
				<velocidad>20</velocidad>
			</viento>
			<viento periodo="00-12">
				<direccion>O</direccion>
				<velocidad>20</velocidad>
			</viento>
			<viento periodo="12-24">
				<direccion>O</direccion>
				<velocidad>20</velocidad>
			</viento>
			<racha_max periodo="00-24"></racha_max>
			<racha_max periodo="00-12"></racha_max>
			<racha_max periodo="12-24"></racha_max>
			<temperatura>
				<maxima>10</maxima>
				<minima>-2</minima>
			</temperatura>
			<sens_termica>
				<maxima>10</maxima>
				<minima>-4</minima>
			</sens_termica>
			<humedad_relativa>
				<maxima>85</maxima>
				<minima>45</minima>
			</humedad_relativa>
			<uv_max>2</uv_max>
		</dia>
		<dia fecha="<?php echo isoDate(4); ?>">
			<prob_precipitacion>70</prob_precipitacion>
			<cota_nieve_prov>900</cota_nieve_prov>
			<estado_cielo descripcion="Intervalos nubosos con lluvia escasa">43</estado_cielo>
			<viento>
				<direccion>NO</direccion>
				<velocidad>10</velocidad>
			</viento>
			<racha_max></racha_max>
			<temperatura>
				<maxima>10</maxima>
				<minima>1</minima>
			</temperatura>
			<sens_termica>
				<maxima>7</maxima>
				<minima>0</minima>
			</sens_termica>
			<humedad_relativa>
				<maxima>75</maxima>
				<minima>50</minima>
			</humedad_relativa>
			<uv_max>2</uv_max>
		</dia>
		<dia fecha="<?php echo isoDate(5); ?>">
			<prob_precipitacion>35</prob_precipitacion>
			<cota_nieve_prov>900</cota_nieve_prov>
			<estado_cielo descripcion="Intervalos nubosos">13</estado_cielo>
			<viento>
				<direccion>N</direccion>
				<velocidad>15</velocidad>
			</viento>
			<racha_max></racha_max>
			<temperatura>
				<maxima>11</maxima>
				<minima>0</minima>
			</temperatura>
			<sens_termica>
				<maxima>11</maxima>
				<minima>0</minima>
			</sens_termica>
			<humedad_relativa>
				<maxima>75</maxima>
				<minima>50</minima>
			</humedad_relativa>
		</dia>
		<dia fecha="<?php echo isoDate(6); ?>">
			<prob_precipitacion>25</prob_precipitacion>
			<cota_nieve_prov>1000</cota_nieve_prov>
			<estado_cielo descripcion="Intervalos nubosos">13</estado_cielo>
			<viento>
				<direccion>N</direccion>
				<velocidad>10</velocidad>
			</viento>
			<racha_max></racha_max>
			<temperatura>
				<maxima>10</maxima>
				<minima>-2</minima>
			</temperatura>
			<sens_termica>
				<maxima>7</maxima>
				<minima>-2</minima>
			</sens_termica>
			<humedad_relativa>
				<maxima>85</maxima>
				<minima>55</minima>
			</humedad_relativa>
		</dia>
	</prediccion>
</root>
