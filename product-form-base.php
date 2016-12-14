<tr>
	<td>Nome</td>
	<td><input type="text" class="form-control" name="nome" value="<?=$produto['nome']?>"></td>
</tr>
<tr>
	<td>Preço</td>
	<td><input type="number" class="form-control" name="preco" value="<?=$produto['preco']?>"></td>
</tr>
<tr>
	<td>Descrição</td>
	<td><textarea  class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
</tr>
<tr>
	<td></td>
	<td><input type="checkbox" name="usado" <?=$usado?> value="true">Usado</td>
</tr>
<tr>
	<td>Categoria</td>
	<td>
		<select  name="categoria_id" class="form-control">
			<?php foreach($categorias as $categoria) : 
			$categoriaTrue = $produto['categoria_id'] == $categoria['id'];
			$codigoSelecao = $categoriaTrue ? "selected='selected'" :"";

			?>
				<option value="<?=$categoria['id']?>" <?=$codigoSelecao?>>
				<?=$categoria['nome']?>
			</option>
			<?php endforeach ?>
		</select>
	</td>
</tr>