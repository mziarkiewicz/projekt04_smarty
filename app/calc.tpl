{extends file="../templates/main.tpl"}

{block name = main}
    <!-- Main -->
    <div id="main" class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Uproszczony kalkulator kredytowy</h2>
                <p>Spróbuj policzyć przybliżoną ratę kredytu</p>
            </header>
{/block}

{block name = content}

<!-- Form -->
	<section>
		<h3>Kalkulator</h3>
		<form method="post" action="{$app_url}/app/calc.php">
			<div class="row gtr-uniform gtr-50">
				<div class="col-12">
					<input type="text" name="amo" id="id_amo" value="{$form['amo']}" placeholder="Kwota kredytu" />
				</div>
				<div class="col-12">
					<input type="text" name="yr" id="id_yr" value="{$form['yr']}" placeholder="Liczba lat" />
				</div>
				<div class="col-12">
					<input type="text" name="pct" id="id_pct" value="{$form['pct']}" placeholder="Oprocentowanie" />
				</div>

				<div class="col-12">
					<input type="submit" value="Oblicz" class=" button primary fit" />
				</div>
			</div>
		</form>
	</section>

{* wyświeltenie listy błędów, jeśli istnieją *}
	{if (isset($messages)) }
		{if (count ( $messages ) > 0) }
			<p>Lista błędów:</p>
			<ol class="messages">
				{foreach $messages as $msg }
					{strip}
						<li>{$msg}</li>
					{/strip}
				{/foreach}
			</ol>
		{/if}
	{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
	<div>
	{if (isset($infos)) }
		{if (count ( $infos ) > 0) }
			<p>Lista informacji:</p>
			<ol class="infos">
				{foreach $infos as $msg }
					{strip}
						<li>{$msg}</li>
					{/strip}
				{/foreach}
			</ol>
		{/if}
	{/if}
	</div>

{* wyświeltenie rezultatu *}
	{if (isset($result)) }
		<p>Miesięczna rata będzie wynosić:</p>
		<div class="result">
			{$result|string_format:"%.2f"}
		</div>
	{/if}

{/block}