$("#pohon").fancytree({
	checkbox: true,
	selectMode: 2,
	source: [
		{title: "Dashboard", key: "1",},
		{title: "Pegawai", key: "2"},
		{title: "Entry SPPD", key: "3"},
		{title: "History SPPD", key: "4"},
		{title: "Inbox SPPD", key: "5"},
		{title: "Administrator Menu", key: "6", folder: true,
			children: [
				{title: "User Data", key: "7"},
				{title: "User Role Level", key: "8"},
				{title: "Database System", key: "9"},
			]
		},
		
	],
});