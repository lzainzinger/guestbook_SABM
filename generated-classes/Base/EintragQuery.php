<?php

namespace Base;

use \Eintrag as ChildEintrag;
use \EintragQuery as ChildEintragQuery;
use \Exception;
use Map\EintragTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'eintrag' table.
 *
 *
 *
 * @method     ChildEintragQuery orderByAutor($order = Criteria::ASC) Order by the autor column
 * @method     ChildEintragQuery orderByDatum($order = Criteria::ASC) Order by the datum column
 * @method     ChildEintragQuery orderByHeader($order = Criteria::ASC) Order by the header column
 * @method     ChildEintragQuery orderByText($order = Criteria::ASC) Order by the text column
 * @method     ChildEintragQuery orderById($order = Criteria::ASC) Order by the id column
 *
 * @method     ChildEintragQuery groupByAutor() Group by the autor column
 * @method     ChildEintragQuery groupByDatum() Group by the datum column
 * @method     ChildEintragQuery groupByHeader() Group by the header column
 * @method     ChildEintragQuery groupByText() Group by the text column
 * @method     ChildEintragQuery groupById() Group by the id column
 *
 * @method     ChildEintragQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildEintragQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildEintragQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildEintrag findOne(ConnectionInterface $con = null) Return the first ChildEintrag matching the query
 * @method     ChildEintrag findOneOrCreate(ConnectionInterface $con = null) Return the first ChildEintrag matching the query, or a new ChildEintrag object populated from the query conditions when no match is found
 *
 * @method     ChildEintrag findOneByAutor(string $autor) Return the first ChildEintrag filtered by the autor column
 * @method     ChildEintrag findOneByDatum(string $datum) Return the first ChildEintrag filtered by the datum column
 * @method     ChildEintrag findOneByHeader(string $header) Return the first ChildEintrag filtered by the header column
 * @method     ChildEintrag findOneByText(string $text) Return the first ChildEintrag filtered by the text column
 * @method     ChildEintrag findOneById(int $id) Return the first ChildEintrag filtered by the id column
 *
 * @method     ChildEintrag[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildEintrag objects based on current ModelCriteria
 * @method     ChildEintrag[]|ObjectCollection findByAutor(string $autor) Return ChildEintrag objects filtered by the autor column
 * @method     ChildEintrag[]|ObjectCollection findByDatum(string $datum) Return ChildEintrag objects filtered by the datum column
 * @method     ChildEintrag[]|ObjectCollection findByHeader(string $header) Return ChildEintrag objects filtered by the header column
 * @method     ChildEintrag[]|ObjectCollection findByText(string $text) Return ChildEintrag objects filtered by the text column
 * @method     ChildEintrag[]|ObjectCollection findById(int $id) Return ChildEintrag objects filtered by the id column
 * @method     ChildEintrag[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class EintragQuery extends ModelCriteria
{

    /**
     * Initializes internal state of \Base\EintragQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'gaestebuch', $modelName = '\\Eintrag', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildEintragQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildEintragQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildEintragQuery) {
            return $criteria;
        }
        $query = new ChildEintragQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildEintrag|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The Eintrag object has no primary key');
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        throw new LogicException('The Eintrag object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildEintragQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The Eintrag object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildEintragQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The Eintrag object has no primary key');
    }

    /**
     * Filter the query on the autor column
     *
     * Example usage:
     * <code>
     * $query->filterByAutor('fooValue');   // WHERE autor = 'fooValue'
     * $query->filterByAutor('%fooValue%'); // WHERE autor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildEintragQuery The current query, for fluid interface
     */
    public function filterByAutor($autor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autor)) {
                $autor = str_replace('*', '%', $autor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EintragTableMap::COL_AUTOR, $autor, $comparison);
    }

    /**
     * Filter the query on the datum column
     *
     * Example usage:
     * <code>
     * $query->filterByDatum('2011-03-14'); // WHERE datum = '2011-03-14'
     * $query->filterByDatum('now'); // WHERE datum = '2011-03-14'
     * $query->filterByDatum(array('max' => 'yesterday')); // WHERE datum > '2011-03-13'
     * </code>
     *
     * @param     mixed $datum The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildEintragQuery The current query, for fluid interface
     */
    public function filterByDatum($datum = null, $comparison = null)
    {
        if (is_array($datum)) {
            $useMinMax = false;
            if (isset($datum['min'])) {
                $this->addUsingAlias(EintragTableMap::COL_DATUM, $datum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datum['max'])) {
                $this->addUsingAlias(EintragTableMap::COL_DATUM, $datum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EintragTableMap::COL_DATUM, $datum, $comparison);
    }

    /**
     * Filter the query on the header column
     *
     * Example usage:
     * <code>
     * $query->filterByHeader('fooValue');   // WHERE header = 'fooValue'
     * $query->filterByHeader('%fooValue%'); // WHERE header LIKE '%fooValue%'
     * </code>
     *
     * @param     string $header The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildEintragQuery The current query, for fluid interface
     */
    public function filterByHeader($header = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($header)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $header)) {
                $header = str_replace('*', '%', $header);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EintragTableMap::COL_HEADER, $header, $comparison);
    }

    /**
     * Filter the query on the text column
     *
     * Example usage:
     * <code>
     * $query->filterByText('fooValue');   // WHERE text = 'fooValue'
     * $query->filterByText('%fooValue%'); // WHERE text LIKE '%fooValue%'
     * </code>
     *
     * @param     string $text The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildEintragQuery The current query, for fluid interface
     */
    public function filterByText($text = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($text)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $text)) {
                $text = str_replace('*', '%', $text);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EintragTableMap::COL_TEXT, $text, $comparison);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildEintragQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(EintragTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(EintragTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EintragTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildEintrag $eintrag Object to remove from the list of results
     *
     * @return $this|ChildEintragQuery The current query, for fluid interface
     */
    public function prune($eintrag = null)
    {
        if ($eintrag) {
            throw new LogicException('Eintrag object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the eintrag table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(EintragTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EintragTableMap::clearInstancePool();
            EintragTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(EintragTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(EintragTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            EintragTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            EintragTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // EintragQuery
