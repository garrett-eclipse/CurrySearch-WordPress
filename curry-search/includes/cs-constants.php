<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class CurrySearchConstants {

	const MANAGEMENT_URL = "https://ms-curry-test/";
	const APPLICATION_URL = "https://ms-curry-test";

	const REGISTER_ACTION  = "register";
	const REGISTER_FIELDS_ACTION = "register_fields";
	const REGISTER_HIERARCHY_ACTION = "register_hierarchy";
	const INDEXING_START_ACTION = "full_indexing_start";
	const INDEXING_PART_ACTION = "full_indexing_part";
	const INDEXING_DONE_ACTION = "full_indexing_done";

	const SEARCH_ACTION = "search";
	const QAC_ACTION = "autocomplete";

	const SEARCHFORMTRANSIENT = "currysearch_searchform";

	const OPTIONS  = "currysearch_options";
}

?>