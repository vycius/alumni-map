--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `lastName` text NOT NULL,
  `lastNameG` text NOT NULL,
  `country` text NOT NULL,
  `laida` text NOT NULL,
  `work` text NOT NULL,
  `mail` text NOT NULL,
  `city` text NOT NULL,
  `Coordinates` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
