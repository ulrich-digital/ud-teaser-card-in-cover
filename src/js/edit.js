import { useEffect, useState } from "@wordpress/element";
import { useSelect } from "@wordpress/data";
import { ComboboxControl } from "@wordpress/components";
import { useBlockProps } from "@wordpress/block-editor";

import { __ } from "@wordpress/i18n";

export default function Edit({ attributes, setAttributes }) {
	const { postId = 0 } = attributes;
	const [options, setOptions] = useState([]);

	// Alle Posts & Projekte holen
	const posts = useSelect((select) => {
		const core = select("core");
		const query = { per_page: -1 }; // alle Beiträge
		const posts = core.getEntityRecords("postType", "post", query) || [];
		const projekte =
			core.getEntityRecords("postType", "projekt", query) || [];
		return [...posts, ...projekte];
	}, []);

	// Options daraus bauen
	useEffect(() => {
		if (!posts) return;
		setOptions(
			posts.map((p) => ({
				label:
					p.title?.rendered ||
					__("(kein Titel)", "ud-teaser-card-in-cover"),
				value: String(p.id),
			})),
		);
	}, [posts]);

	const blockProps = useBlockProps({
		className: "teaser_card_in_cover",
	});

	return (
		<div {...useBlockProps({ className: "teaser_card_in_cover" })}>
	<ComboboxControl
		__next40pxDefaultSize
		__nextHasNoMarginBottom
		label={__("Beitrag wählen", "ud-teaser-card-in-cover")}
		value={postId ? String(postId) : ""}
		onChange={(val) =>
			setAttributes({ postId: parseInt(val, 10) || 0 })
		}
		options={options}
	/>
</div>
	);
}
