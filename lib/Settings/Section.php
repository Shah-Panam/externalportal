<?php

/**
 * @copyright Copyright (c) 2022 Opinsys Oy <dev@opinsys.fi>
 *
 * @author Tuomas Nurmi <tuomas.nurmi@opinsys.fi>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 * 
 * 
SPDX-FileCopyrightText: Opinsys Oy <dev@opinsys.fi>
SPDX-License-Identifier: AGPL-3.0-or-later
 *
 */
 
namespace OCA\ExternalPortal\Settings;

use OCP\IL10N;
use OCP\IURLGenerator;
use OCP\Settings\IIconSection;

class Section implements IIconSection {
	private IL10N $l;
	private IURLGenerator $url;

	public function __construct(IURLGenerator $url, IL10N $l) {
		$this->url = $url;
		$this->l = $l;
	}

	public function getIcon(): string {
		return $this->url->imagePath('external', 'external.svg');
	}

	public function getID(): string {
		return 'externalportal';
	}

	public function getName(): string {
		return $this->l->t('External portal');
	}

	public function getPriority(): int {
		return 55;
	}
}
