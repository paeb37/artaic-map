/**
 * Registers the Pro only block for this module
 * 
 * @since 9.0.0
 * @for category-legends
*/

jQuery(function($){
	/**
	 * Scalable module defined here
	 * 
	 * This allows Pro to improve on basic functionality, and helps stay within our architecture
	*/
	WPGMZA.Integration.Blocks.Infowindow = function(){
		wp.blocks.registerBlockType('gutenberg-wpgmza/infowindow', this.getDefinition());
	}

	WPGMZA.Integration.Blocks.Infowindow.createInstance = function() {
        return new WPGMZA.Integration.Blocks.Infowindow();
    }

    WPGMZA.Integration.Blocks.Infowindow.prototype.onEdit = function(props){
    	const inspector = this.getInspector(props);
    	const preview = this.getPreview(props);

    	return [
    		inspector,
    		preview
    	];
    }

    WPGMZA.Integration.Blocks.Infowindow.prototype.getInspector = function(props){
    	let inspector = [];
    	if(!!props.isSelected){
    		let panel = React.createElement(
    			wp.blockEditor.InspectorControls,
    			{ key: "inspector" },
    			React.createElement(
					wp.components.PanelBody,
					{ title: wp.i18n.__('Map Options') },
	    			React.createElement(wp.components.SelectControl, {
						name: "id",
						label: wp.i18n.__("Map"),
						value: props.attributes.id || "",
						options: this.getMapOptions(),
						onChange: (value) => {
							props.setAttributes({id : value});
						}
					}),
				)
    		);

    		inspector.push(panel);
    	}
    	return inspector;
    }

    WPGMZA.Integration.Blocks.Infowindow.prototype.getPreview = function(props){
    	return React.createElement(
			"div",
			{ className: props.className + " wpgmza-gutenberg-block-module" },
			React.createElement(wp.components.Dashicon, { icon: "testimonial" }),
			React.createElement(
				"span",
				{ "class": "wpgmza-gutenberg-block-title" },
				wp.i18n.__("Your info window will appear here on your websites front end")
			),
			React.createElement(
				"div",
				{ "class": "wpgmza-gutenberg-block-hint"},
				wp.i18n.__("Must be placed on map page. We recommend setting \"default\" style in map settings (Maps > Edit > Settings > Info Windows)")
			)
		)
    }

	WPGMZA.Integration.Blocks.Infowindow.prototype.getDefinition = function(){
		let keywords = this.getKeywords();

		keywords = keywords.map((phrase) => {
			return wp.i18n.__(phrase)
		});

		return {
			title : wp.i18n.__("Infowindow"),
			description : wp.i18n.__("WP Go Maps Infowindow block"),
			icon : "testimonial",
			category : 'wpgmza-gutenberg',
			attributes : this.getAttributes(),
			keywords : keywords,
			edit : (props) => {
				return this.onEdit(props);
			},
			save : (props) => { return null; }
		};
	}

	WPGMZA.Integration.Blocks.Infowindow.prototype.getAttributes = function(){
		return {
			id : {type : 'string'}
		};
	}

	WPGMZA.Integration.Blocks.Infowindow.prototype.getKeywords = function(){
		return [
			'Infowindow', 
			'Marker Infowindow', 
			'Map Infowindow', 
			'Marker Details', 
			'Marker', 
		];
	}

	 WPGMZA.Integration.Blocks.Infowindow.prototype.getMapOptions = function () {
		let data = [];

		WPGMZA.gutenbergData.maps.forEach(function (el) {
			data.push({
				key: el.id,
				value: el.id,
				label: el.map_title + " (" + el.id + ")"
			});
		});

		return data;
	};

	/*
	 * Register the block
	*/
	WPGMZA.Integration.Blocks.instances.infowindow = WPGMZA.Integration.Blocks.Infowindow.createInstance(); 
});