Purpose
---

forge_links is a TYPO3 extension used as an example of how the TYPO3 link wizard can be extended. It functions as
an example extension for the core patch that introduces the missing hook to make the extendability of the link
wizard complete.

forge_links works on current master (9-dev) and schould be also working on 8LTS (not tested).

How to use it
---
Install the extension, make sure the classes are loaded. You now have an additional tab in the link wizard called
"Forge Issue Number". It should be functional out of the box. However to be able to edit an existing link the new hook needs to
be present in the TYPO3 Core (https://review.typo3.org/#/c/56730/).
