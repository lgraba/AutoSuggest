// global.js
// Use Typeahead.js with JQuery to produce some auto-suggestions

// jQuery: DOM loaded and ready
$(document).ready(function() {

	// New Bloodhound instance
	var users = new Bloodhound({
		// Required for Bloodhound
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('username'),
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		// Define where we are querying remote data
		remote: {
			url: 'users.php?query=%QUERY',
			wildcard: '%QUERY'
		}
	});

	// Initialize the Bloodhound instance
	users.initialize();

	// Use Typeahead.js now, selecting for the id 'users'
	$('#users').typeahead({
		hint: true,					// Hint inside actual input itself
		highlight: true,			// Highlight each field depending on what you've typed
		minLength: 2				// Minimum length for auto-suggesting
	}, {
		name: 'users',				// Name of dataset
		displayKey: 'username',		// What to display on dropdown suggestions
		source: users.ttAdapter()	// Define source [Bloodhound instance].[adapter]
	});

});