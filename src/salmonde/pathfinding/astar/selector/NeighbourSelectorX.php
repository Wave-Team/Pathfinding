<?php
declare(strict_types = 1);

namespace salmonde\pathfinding\astar\selector;

use pocketmine\block\Block;
use pocketmine\math\Vector3;

class NeighbourSelectorX implements NeighbourSelector {

	public function getNeighbours(Block $block): array{
		return [
			Vector3::SIDE_WEST => $block->getSide(Vector3::SIDE_WEST),
			Vector3::SIDE_EAST => $block->getSide(Vector3::SIDE_EAST)
		];
	}
}
