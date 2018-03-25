<?php
function aFunction(string $val): array
{
	return explode(" ",$val);
}

print_r(aFunction('this biscuits'));