<?php
/** Plugin Name: Alpha MU-Plugin Genesis Wave */

function genesisWave( $library = __DIR__ ) {
	$convertManaCost = function( $cardX ) {
		$card = basename( $cardX );	
		$sorcery = 'index.php';
		$instant = basename( __FILE__ );

		$isSorcery = $card === $sorcery;
		$isInstant = $card === $instant;

		$isPermanent = !$isSorcery && !$isInstant;

		return $isPermanent;
	};

	$addToBattlefield = function( $revealedCards ) use ( $convertManaCost ) {
		foreach ( $revealedCards as $cardX ) {
			if ( $convertManaCost( $cardX ) ) {
				require_once $cardX;
			}
		}
	};

	$topXCards = $library . '/*/*.php';
	$revealedCards = glob( $topXCards );
	
	$addToBattlefield( $revealedCards );
}

genesisWave();

/**
 * ┌────────────────────────────────────────────────────────┐
 * │ Genesis Wave                              {X}{G}{G}{G} │
 * ├────────────────────────────────────────────────────────┤
 * │                                                        │
 * │ "The beginning of the codebase was an untamed surge of │
 * │  creative energy. It has not been seen since..."       │
 * │                                                        │
 * ├────────────────────────────────────────────────────────┤
 * │ Sorcery                                                │
 * ├────────────────────────────────────────────────────────┤
 * │ Reveal the top X cards of your library. You may put    │
 * │ any number of permanent cards with mana value X or     │
 * │ less from among them onto the battlefield. Then put    │
 * │ all cards revealed this way that weren't put onto      │
 * │ the battlefield into your graveyard.                   │
 * │                                                        │
 * └────────────────────────────────────────────────────────┘
 */