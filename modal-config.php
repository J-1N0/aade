<div class="modal" id="config-settings" tabindex="-1" role="dialog" aria-labelledby="configSettings">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<form class="save-file-form" onsubmit="return aade.saveConfigs(this)" onreset="return aade.loadDefaultConfigs()">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Configurações</h4>
				</div>

				<div class="modal-body">
					<ul id="config-tabs" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#default-config-tab" aria-controls="default-config-tab" role="tab" data-toggle="tab">
								<span class="glyphicon glyphicon-cog"></span>
								Configurações
							</a>
						</li>
						<li role="presentation">
							<a href="#appearance-tab" aria-controls="appearance-tab" role="tab" data-toggle="tab">
								<span class="glyphicon glyphicon-picture"></span>
								Aparência
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="default-config-tab">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="config-game-field-aa1" class="control-label">Jogo:</label>
										<div class="radio">
											<div class="radio">
												<input type="radio" name="config-game-field" id="config-game-field-aa1" value="aa1" />
												<label for="config-game-field-aa1"><span></span>Phoenix Wright: Ace Attorney (AA1)</label>
											</div>
											<div class="radio">
												<input type="radio" name="config-game-field" id="config-game-field-aa2" value="aa2" />
												<label for="config-game-field-aa2"><span></span>Phoenix Wright: Ace Attorney - Justice For All (AA2)</label>
											</div>
											<div class="radio">
												<input type="radio" name="config-game-field" id="config-game-field-aa3" value="aa3" />
												<label for="config-game-field-aa3"><span></span>Phoenix Wright: Ace Attorney - Trials and Tribulations (AA3)</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="config-name-type-original" class="control-label">Nomes da Tabela de Equivalência:</label>
										<div class="radio">
											<input type="radio" name="config-name-type" id="config-name-type-original" value="o" />
											<label for="config-name-type-original"><span></span>Originais</label>
										</div>
										<div class="radio">
											<input type="radio" name="config-name-type" id="config-name-type-adapted" value="a" />
											<label for="config-name-type-adapted"><span></span>Adaptados</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="config-platform-3ds" class="control-label">Plataforma:</label>
										<div class="radio">
											<input type="radio" name="config-platform" id="config-platform-3ds" value="3ds" />
											<label for="config-platform-3ds"><span></span>Nintendo 3DS</label>
										</div>
										<div class="radio">
											<input type="radio" name="config-platform" id="config-platform-ds-jacutemsabao" value="ds_jacutemsabao" />
											<label for="config-platform-ds-jacutemsabao"><span></span>Nintendo DS <small>(Americana - Jacutem Sabão)</small></label>
										</div>
										<div class="radio">
											<input type="radio" name="config-platform" id="config-platform-ds-american" value="ds_american" />
											<label for="config-platform-ds-american"><span></span>Nintendo DS <small>(Americana)</small></label>
										</div>
										<div class="radio">
											<input type="radio" name="config-platform" id="config-platform-ds-european" value="ds_european" />
											<label for="config-platform-ds-european"><span></span>Nintendo DS <small>(Européia)</small></label>
										</div>
									</div>
									<sub>
										1. Se ativado, blocos contendo mais de 32 linhas serão
										considerados inválidos na prévia, e na função de analisar
										script.
									</sub>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="invalidate-large-lines-true" class="control-label">Invalidar Linhas Largas¹:</label>
										<div class="radio">
											<input type="radio" name="invalidate-large-lines" id="invalidate-large-lines-true" value="true" />
											<label for="invalidate-large-lines-true"><span></span>Sim</label>
										</div>
										<div class="radio">
											<input type="radio" name="invalidate-large-lines" id="invalidate-large-lines-false" value="false" />
											<label for="invalidate-large-lines-false"><span></span>Não</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 visible-xs">
									<div class="form-group">
										<label for="config-mobile-show-initially-preview" class="control-label">Exibir Inicialmente²:</label>
										<div class="radio">
											<input type="radio" name="config-mobile-show-initially" id="config-mobile-show-initially-preview" value="p" />
											<label for="config-mobile-show-initially-preview"><span></span>Prévia</label>
										</div>
										<div class="radio">
											<input type="radio" name="config-mobile-show-initially" id="config-mobile-show-initially-textfield" value="t" />
											<label for="config-mobile-show-initially-textfield"><span></span>Campo de Texto</label>
										</div>
									</div>
									<sub class="visible-xs">2. Apenas para dispositivos de pouca largura (celulares)</sub>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="appearance-tab">
							<div class="row">
								<div class="col-sm-3">
									<div class="form-group">
										<label for="config-theme-light" class="control-label">Tema:</label>
										<div class="radio">
											<div class="radio">
												<input type="radio" name="config-theme" id="config-theme-light" value="light" />
												<label for="config-theme-light"><span></span>Claro</label>
											</div>
											<div class="radio">
												<input type="radio" name="config-theme" id="config-theme-dark" value="dark" />
												<label for="config-theme-dark"><span></span>Escuro</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-9">
									<label for="highlight-syntax-colors" class="control-label">Cores da Marcação de Sintaxe:</label>
									<table class="table table-bordered table-hover table-striped">
										<thead>
											<tr>
												<th>Descrição</th>
												<th>Cor (Tema Claro)</th>
												<th>Cor (Tema Escuro)</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													Tags em Geral<br />
													(<i><small>{name: 512}, {bg: 2}</small></i>)
												</td>
												<td>
													<div class="input-group colorpicker-component">
														<input type="text" class="form-control" name="highlightingColors[light][tags]" />
														<span class="input-group-addon"><i></i></span>
													</div>
												</td>
												<td>
													<div class="input-group colorpicker-component">
														<input type="text" class="form-control" name="highlightingColors[dark][tags]" />
														<span class="input-group-addon"><i></i></span>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													Nomes Originais<br />
													(<i><small>Phoenix, Mia, Larry</small></i>)
												</td>
												<td>
													<div class="input-group colorpicker-component">
														<input type="text" class="form-control" name="highlightingColors[light][originalNames]" />
														<span class="input-group-addon"><i></i></span>
													</div>
												</td>
												<td>
													<div class="input-group colorpicker-component">
														<input type="text" class="form-control" name="highlightingColors[dark][originalNames]" />
														<span class="input-group-addon"><i></i></span>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													Nomes Adaptados<br />
													(<i><small>Fênix, Aline, Mauro</small></i>)
												</td>
												<td>
													<div class="input-group colorpicker-component">
														<input type="text" class="form-control" name="highlightingColors[light][adaptedNames]" />
														<span class="input-group-addon"><i></i></span>
													</div>
												</td>
												<td>
													<div class="input-group colorpicker-component">
														<input type="text" class="form-control" name="highlightingColors[dark][adaptedNames]" />
														<span class="input-group-addon"><i></i></span>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													Quebra-de-linha<br />
													(<i><small>{b}</small></i>)
												</td>
												<td>
													<div class="input-group colorpicker-component">
														<input type="text" class="form-control" name="highlightingColors[light][lineBreak]" />
														<span class="input-group-addon"><i></i></span>
													</div>
												</td>
												<td>
													<div class="input-group colorpicker-component">
														<input type="text" class="form-control" name="highlightingColors[dark][lineBreak]" />
														<span class="input-group-addon"><i></i></span>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													Fim de Seção<br />
													(<i><small>{endjmp}</small></i>)
												</td>
												<td>
													<div class="input-group colorpicker-component">
														<input type="text" class="form-control" name="highlightingColors[light][endSection]" />
														<span class="input-group-addon"><i></i></span>
													</div>
												</td>
												<td>
													<div class="input-group colorpicker-component">
														<input type="text" class="form-control" name="highlightingColors[dark][endSection]" />
														<span class="input-group-addon"><i></i></span>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													Tags de Espera<br />
													(<i><small>{wait: 32}</small></i>)
												</td>
												<td>
													<div class="input-group colorpicker-component">
														<input type="text" class="form-control" name="highlightingColors[light][wait]" />
														<span class="input-group-addon"><i></i></span>
													</div>
												</td>
												<td>
													<div class="input-group colorpicker-component">
														<input type="text" class="form-control" name="highlightingColors[dark][wait]" />
														<span class="input-group-addon"><i></i></span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="reset" class="btn btn-warning">
						<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
						Resetar
					</button>
					<button type="submit" class="btn btn-primary">
						<span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
						Salvar
					</button>
				</div>
			</form>
		</div>
	</div>
</div>