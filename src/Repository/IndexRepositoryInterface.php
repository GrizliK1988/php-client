<?php
/**
 * Created by PhpStorm.
 * User: dwendlandt
 * Date: 17/12/14
 * Time: 08:11
 */

namespace Elastification\Client\Repository;

use Elastification\Client\Exception\RepositoryException;

interface IndexRepositoryInterface
{
    const INDEX_EXIST = 'IndexExistRequest';
    const INDEX_CREATE = 'CreateIndexRequest';
    const INDEX_DELETE = 'DeleteIndexRequest';
    const INDEX_REFRESH = 'RefreshIndexRequest';
    const INDEX_GET_MAPPING = 'GetMappingRequest';
    const INDEX_CREATE_MAPPING = 'CreateMappingRequest';
    const INDEX_GET_ALIASES = 'GetAliasesRequest';
    const INDEX_UPDATE_ALIASES = 'UpdateAliasesRequest';

    /**
     * Checks if an index exists
     *
     * @param string $index
     * @return bool
     * @author Daniel Wendlandt
     */
    public function exists($index);

    /**
     * Creates an index.
     *
     * @param string $index
     * @return \Elastification\Client\Response\ResponseInterface
     * @author Daniel Wendlandt
     */
    public function create($index);

    /**
     * deletes an index.
     *
     * @param string $index
     * @return \Elastification\Client\Response\ResponseInterface
     * @author Daniel Wendlandt
     */
    public function delete($index);

    /**
     * refreshes an index.
     *
     * @param string $index
     * @return \Elastification\Client\Response\ResponseInterface
     * @author Daniel Wendlandt
     */
    public function refresh($index);

    /**
     * Gets the mapping of all/index/types
     *
     * @param null|string $index
     * @param null|string $type
     * @return \Elastification\Client\Response\ResponseInterface
     * @author Daniel Wendlandt
     */
    public function getMapping($index = null, $type = null);

    /**
     * Creates the mapping of all/index/types
     *
     * @param array $mapping
     * @param string $index
     * @param string $type
     * @return \Elastification\Client\Response\ResponseInterface
     * @author Daniel Wendlandt
     */
    public function createMapping(array $mapping, $index, $type);

    /**
     * Gets all aliases based on indices.
     *
     * @param null|string $index
     * @return \Elastification\Client\Response\ResponseInterface
     * @author Daniel Wendlandt
     */
    public function getAliases($index = null);

    /**
     * Updates aliases by given actions
     *
     * @param array $aliasActions
     * @return \Elastification\Client\Response\ResponseInterface
     * @throws RepositoryException
     * @author Daniel Wendlandt
     */
    public function updateAliases(array $aliasActions);


}